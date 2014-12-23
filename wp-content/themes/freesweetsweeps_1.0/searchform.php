					
                    <form method="get" action="<?php bloginfo('url'); ?>/">
                    <ul data-role="listview" data-inset="true">
                   	
						<li style="text-align:center" data-role="fieldcontain"><input  type="text" id="s" name="s" value="<?php the_search_query(); ?>"></li>
						<li style="text-align:center" data-role="fieldcontain"><input type="submit" value="Search Offers" data-theme="a" data-role="button" ></li>
					  </ul>
                    </form>
                 