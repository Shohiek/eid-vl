<html>
<head>
    <?php $this -> load -> view('tmpl_head_v'); ?>
</head>
<body>  
    <div id="title">
        <div class="row">
            <div class"col-md-4">dd</div>
            <div class"col-md-4">dd</div>
        </div>
    </div>
    <div id="header">
        <?php
        if(isset($hide_menu)==false){
            $this -> load -> view('tmpl_header_v');
        } ?>
    </div>
    <div id="content_view">
        <div id="side"> <?php $this -> load -> view('tmpl_side_menu_v'); ?></div>
        <div id="main"><?php $this -> load -> view($contentView); ?></div>

        
    </div>
    <div id="footer">
        <?php $this -> load -> view('tmpl_footer_v'); ?>
    </div>
    <?php $this -> load -> view('modals'); ?>
</body>
</html>
