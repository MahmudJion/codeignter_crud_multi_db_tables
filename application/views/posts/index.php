<div class="container">
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Posts <a href="<?php echo site_url('posts/add/'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Description</th>
                            <th>URL</th>
                            <th>Tags</th>
                            <th>Keyword</th>
                            <th>Author</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($posts)): foreach($posts as $post): ?>
                        <tr>
                            <td><?php echo '#'.$post['id']; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td><?php echo $post['content']; ?></td>
                            <td><?php echo $post['description']; ?></td>
                            <td><?php echo $post['url']; ?></td>
                            <td><?php echo $post['tags']; ?></td>
                            <td><?php echo $post['keyword']; ?></td>
                            <td><?php echo $post['author']; ?></td>
                            <td>
                                <a href="<?php echo site_url('posts/view/'.$post['id']); ?>" >View</a>
                                <a href="<?php echo site_url('posts/edit/'.$post['id']); ?>" >Edit</a>
                                <a href="<?php echo site_url('posts/delete/'.$post['id']); ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">Post(s) not found</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>