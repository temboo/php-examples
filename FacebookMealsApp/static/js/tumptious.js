var FB_DEMO = FB_DEMO || {};
FB_DEMO.place = null;
FB_DEMO.tagged = {};

$(function() {
    // Request user's current geolocation
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
            FB_DEMO.latitude = position.coords.latitude;
            FB_DEMO.longitude = position.coords.longitude;
        });
    } else {
        alert('You will not have any fun here unless you share your location');
    }

    /**
     * Display the logged-in Facebook user's information
     */ 
    var populateUserInfo = function() {
        // Safeguard against duplication!
        $('.user-image').remove();
        $('.hidden-phone').remove();
        $.get(FB_DEMO.base_uri + 'tumptious.php/getinfo', function(data) {
            var userInfo = JSON.parse(data);
            $('.logout-link').before('<span class="hidden-phone">' +
                                     userInfo['name'] + '</span>');
            $('.hidden-phone').before('<img class="user-image" src="https://graph.facebook.com/' +
                                      userInfo['username'] +
                                      '/picture?type=square" width="25" height="25" />');
        });
    }
    
    // If, on page load, we have a logout button, populate user info.
    if ($('#inout-button').hasClass('logout-button')) {
        populateUserInfo();
    }
    
    // Streamlined version of the composer/share JS for use on the meals/* pages.
    $('#share-button').on('click', function() {
        $('#composer-modal').modal();
    });

    // Toggle the friend-list view on or off
    $('#toggle-friends').on('click', function() {
        $('#composer-friends-group').toggle();
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
            $('#composer-friends-field').val('');
            // If the place field is still open, close it.
            if ($('#toggle-place').hasClass('active')) {
                $('#composer-place-group').toggle();
                $('#toggle-place').removeClass('active');
            }
        }
    });
    
    // Toggle the place-list view on or off
    $('#toggle-place').on('click', function() {
        $('#composer-place-group').toggle();
        if (FB_DEMO.place) {
            // Toggling the place button destroys existing location info.
            FB_DEMO.place = null;
            updateSummary();
        }
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
            $('#composer-place-field').val('');
            // If the friend field is still open, close it.
            if ($('#toggle-friends').hasClass('active')) {
                $('#composer-friends-group').toggle();
                $('#toggle-friends').removeClass('active');
            }
        }
    });

    // Populate autocomplete data for the friends-list
    $('#composer-friends-field').autocomplete({
        source: function(request, respond) {
            $.post(FB_DEMO.base_uri + 'tumptious.php', {
                target: 'find-friends',
                query: $('#composer-friends-field').val()
            }, function(response) {
                respond(JSON.parse(response));
            });
        },
        appendTo: '#composer-friends-group',
        select: function(event, ui) {
            if (Object.keys(FB_DEMO.tagged).indexOf(ui.item.value) < 0) {
                FB_DEMO.tagged[ui.item.label] = [ui.item.value, ui.item.link];
            }
            $('#composer-friends-field').autocomplete('close');
            $('#composer-friends-group').toggle();
            $('#toggle-friends').removeClass('active');
            updateSummary();
        }
    }).data('ui-autocomplete')._renderItem = function(ul, item) {
        var li = $('<li />').addClass('friend ui-menu-item').attr({'role': 'option',
                                                                'aria-label': item.label});
       $('<img />').attr({src: item.picture,
                                     alt: item.label,
                                     width: 25,
                                     height: 25}).appendTo(li);
        $('<a />').addClass('text').text(item.label).appendTo(li);
        return li.appendTo(ul);
    };

    // Populate autocomplete data for the places-list
    $('#composer-place-field').autocomplete({
        source: function(request, respond) {
            $.post(FB_DEMO.base_uri + 'tumptious.php', {
                target: 'find-places',
                searchString: $('#composer-place-field').val(),
                locationString: FB_DEMO.latitude + ',' + FB_DEMO.longitude
            }, function(response) {
                respond(JSON.parse(response));
            });
        },
        appendTo: '#composer-place-group',
        //  Rather than place the item value in the field, populate composer message data.
        select: function(event, ui) {
            FB_DEMO.place = [ui.item.label, ui.item.value, ui.item.link];
            $('#composer-place-field').autocomplete('close');
            $('#composer-place-group').toggle();
            $('#toggle-place').removeClass('active');
            updateSummary();
        }
    }).data('ui-autocomplete')._renderItem = function(ul, item) {
        var li = $('<li />').addClass('place ui-menu-item').attr({role: 'option',
                                                    'aria-label': item.label});
            if (item.picture !== undefined ) {
                li.append($("<img />").attr({src: item.picture,
                                             alt: item.label,
                                             width: 25,
                                             height: 25}) );
            }

            var text_pieces = [item.label];
            if (item.location !== undefined) {
                if (item.location.street !== undefined ) {
                    text_pieces.push(item.location.street);
                }
                if (item.location.area !== undefined) {
                    text_pieces.push(item.location.area);
                }
            }

            li.append($('<a />').addClass('text ui-corner-all').text(text_pieces.join(' • ')));
            if (item.were_here_count !== undefined) {
                li.append($('<div />').addClass('subtext').text(item.were_here_count + ' were here.'));
            }
        return li.appendTo(ul);
    };
    
    var updateSummary = function() {
        var placeSummary = null;
        var taggedSummary = null;
        var message = '';
        // Avoid repeating these.1
        $('.friend').remove();1
        if (FB_DEMO.place) {
            placeSummary = 'at <a href="' + FB_DEMO.place[2] + '">' + FB_DEMO.place[0] + '</a> ';
            message += placeSummary;
        }
        if (Object.keys(FB_DEMO.tagged).length > 0) {
            var tagLinks = [];
            for (var key in FB_DEMO.tagged) {
                var currentTag = '<a href="' + FB_DEMO.tagged[key][1] + '">' + key + '</a>';
                tagLinks.push(currentTag);
                // While we're here, add back the friend buttons.
                var friendLabel = $('<li />').addClass('friend');
                friendLabel.append($('<a />').attr({'href': FB_DEMO.tagged[key][1]}).text(key));
                var subButton = $('<button />').addClass('btn btn-link').text('x');
                subButton.attr({
                    'type': 'button',
                    'title': 'Remove ' + key + ' from meal',
                    'target': key
                });
                subButton.on('click', function() {
                    // alert($(this).attr('target'));
                    delete FB_DEMO.tagged[$(this).attr('target')];
                    updateSummary();
                });
                friendLabel.append(subButton);
                $('#composer-friends-group-fields').prepend(friendLabel);
            }
            taggedSummary = 'with ' + tagLinks.join();
            message += taggedSummary;
        }
        $('#composer-message-data').html(message);
        if (placeSummary || taggedSummary) {
            $('#composer-message-data').show();
        } else {
            $('#composer-message-data').hide();
        }
    }

    // Submit the Facebook-post form!
    $('#composer').submit(function(e) {
        e.preventDefault();
        var tagString = null;
        if (Object.keys(FB_DEMO.tagged).length > 0) {
            var tagIDs = [];
            for (var key in FB_DEMO.tagged) {
                tagIDs.push(FB_DEMO.tagged[key][0]);
            }
            tagString = tagIDs.join();
        }
        var postData = {
            target: 'timeline-post',
            meal: document.URL,
            message: $('#composer-message').val(),
            location: (FB_DEMO.place) ? FB_DEMO.place[1] : null,
            tagged: tagString            
        };
        $.post(FB_DEMO.base_uri + 'tumptious.php', postData, 
            function(data) {
                $('.close').click();
                $('#social-actions').html('<h3 style="text-align:center;">Your Facebook status has been updated.</h3>');
        });
    });
});