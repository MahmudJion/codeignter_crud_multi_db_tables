<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"> Edit Post <a href="<?php echo site_url('posts/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" value="<?php echo $post[0]->title?>" name="title" placeholder="Enter title"<?php echo !empty($post['title'])?$post['title']:''; ?>">
                            <?php echo form_error('title','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" placeholder="Enter post content"><?php echo !empty($post['content'])?$post['content']:''; ?><?php echo $post[0]->content?></textarea>
                            <?php echo form_error('content','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">Description</label>
                            <textarea name="description" class="form-control" placeholder="Enter post description"><?php echo !empty($post['description'])?$post['description']:''; ?><?php echo $post[0]->description?></textarea>
                            <?php echo form_error('content','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">URL</label>
                            <textarea name="url" class="form-control" placeholder="Enter post url"><?php echo !empty($post['url'])?$post['url']:''; ?><?php echo $post[0]->url?></textarea>
                            <?php echo form_error('content','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">Tags</label>
                            <textarea name="tags" class="form-control" placeholder="Enter post tags"><?php echo !empty($post['tags'])?$post['tags']:''; ?><?php echo $post[0]->tags?></textarea>
                            <?php echo form_error('content','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">Keyword</label>
                            <textarea name="keyword" class="form-control" placeholder="Enter post keyword"><?php echo !empty($post['keyword'])?$post['keyword']:''; ?><?php echo $post[0]->keyword?></textarea>
                            <?php echo form_error('content','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">Author</label>
                            <textarea name="author" class="form-control" placeholder="Enter post author"><?php echo !empty($post['author'])?$post['author']:''; ?><?php echo $post[0]->author?></textarea>
                            <?php echo form_error('content','<p class="text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>