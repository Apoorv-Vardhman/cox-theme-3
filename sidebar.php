<div class="main-sidebar">
    <div class="single-sidebar-widget">
        <div class="wid-title">
            <h3>Search</h3>
        </div>
        <div class="search_widget">
            <?php
            get_search_form( );
            ?>
        </div>
    </div>
    <?php
    dynamic_sidebar('primary')
    ?>
</div>
