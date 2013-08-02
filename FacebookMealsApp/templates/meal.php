<?php include_once( dirname(__FILE__) . '/header.php' ); ?>

<section id="meal" class="meal row-fluid" data-meal="<?php echo htmlspecialchars( $meal->id ); ?>" data-mealtitle="<?php echo htmlspecialchars( $meal->title ); ?>" role="main">
    <div class="span4 thumbnail img-container"><noscript><img alt="<?php echo htmlspecialchars( $meal->title ); ?>" src="<?php echo htmlspecialchars( Facebook_Sample_Application::STATIC_BASE_URI . 'images/meals/' . $meal->id . '.jpg' ); ?>"></noscript></div>
    <div class="span8">
        <header>
            <h1><?php echo htmlspecialchars( $meal->title ); ?></h1>
            <p class="lead"><?php echo htmlspecialchars( $meal->description ); ?></p>
        </header>

        <p id="ingredients">Ingredients: <?php echo htmlspecialchars( implode( ', ', $meal->ingredients ) ); ?></p>

        <div id="social-actions">
            <?php if (array_key_exists('facebook_access_token', $_SESSION)) { ?>
                <button class="btn" id="share-button" type="button">I ate this!</button>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Form for composing FB posts. -->
<form id="composer">
    <input id="composer-meal" type="hidden" value="<?php echo $meal->id; ?>">
    <div class="modal" id="composer-modal" role="dialog" aria-labelledby="modal-title" style="display: none;" aria-hidden="true">
        <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="modal-title">Post to Timeline</h3>
        </div>
        <div class="modal-body">
            <div id="composer-message-group" class="control-group">
                <label class="control-label" for="composer-message">Message</label>
                <div class="controls">
                    <input class="input-xxlarge" id="composer-message" type="text" maxlength="1000" autocomplete="off" placeholder="Write something about the <?php echo strtolower($meal->title); ?>">
                </div>
                <span id="composer-message-data" style="display: none;"></span>
            </div>
            <div id="autocomplete-fields">
                <div class="form-inline" id="composer-friends-group" style="display: none;">
                    <ul class="unstyled inline" id="composer-friends-group-fields">
                        <li>
                            <input type="search" role="combobox" id="composer-friends-field" autocomplete="off" placeholder="Who are you with?" aria-label="Who are you with?">
                        </li>
                    </ul>
                </div>
                <div id="composer-place-group" style="display: none;">
                    <input type="search" role="combobox" id="composer-place-field" autocomplete="off" placeholder="Where are you?" aria-label="Where are you?">
                </div>
            </div>
            <div class="btn-group" id="composer-buttons">
                <button id="toggle-place" type="button" title="Add location" aria-controls="composer-place-group" class="btn">
                    <img alt="Facebook Location icon" src="http://s.facebooksampleapp.com/scrumptious/static/images/location.png" width="32" height="32">
                </button>
                <button id="toggle-friends" type="button" title="Tag friends" aria-controls="composer-friends-group" class="btn">
                    <img alt="Facebook silhouette icon" src="http://s.facebooksampleapp.com/scrumptious/static/images/friend.png" width="32" height="32">
                </button>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button id="post-button" class="btn btn-primary" type="submit">Post to Timeline</button>
        </div>
    </div>
</form>

<script>jQuery(document).one( "webp-detect", function(){FB_DEMO.images.add_images()} );</script>

<?php include_once( dirname(__FILE__) . '/footer.php' ); ?>
