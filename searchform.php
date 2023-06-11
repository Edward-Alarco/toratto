<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <i class="fas fa-search"></i>
    <input type="search" class="search-field" placeholder="Buscar" value="<?php echo get_search_query() ?>" name="s" />
    <button type="submit" class="search-submit">Buscar</button>
</form>