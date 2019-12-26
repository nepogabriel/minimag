<form method="GET" action="<?php echo get_site_url(); ?>">
    <input class="search_input" type="text" name="s" placeholder="O que procura?" value="<?php the_search_query(); ?>">
    <input class="search_submit" type="submit" value="Pesquisar">
</form>