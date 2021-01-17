<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Post Details <a href="<?php echo site_url('posts/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Title:</label>
                    <p><?php echo $posts[0]->title ?></p>
                </div>
                <div class="form-group">
                    <label>Content:</label>
                    <p><?php echo $posts[0]->content ?></p>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <p><?php echo $posts[0]->description ?></p>
                </div>
                <div class="form-group">
                    <label>URL:</label>
                    <p><?php echo $posts[0]->url ?></p>
                </div>
                <div class="form-group">
                    <label>Tags:</label>
                    <p><?php echo $posts[0]->tags ?></p>
                </div>
                <div class="form-group">
                    <label>Keyword:</label>
                    <p><?php echo $posts[0]->keyword ?></p>
                </div>
                <div class="form-group">
                    <label>Author:</label>
                    <p><?php echo $posts[0]->author ?></p>
                </div>
            </div>
        </div>
    </div>
</div>