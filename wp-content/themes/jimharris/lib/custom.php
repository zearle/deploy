<?php 
function get_insta_posts() {
	$response = wp_remote_get( 'https://api.instagram.com/v1/users/self/media/recent/?access_token=3018331789.e433ced.fab7346c7f6245aa829f930343b8f62a&count=8');
	if( is_array($response) ) {
	  	$body = json_decode( $response['body'], TRUE); // use the content
	  	$data = $body['data'];
		foreach ($data as $post) {
			$link = $post['link'];
			$thumbnail_url = $post['images']['thumbnail']['url'];
		?>
			<a class="post" href="<?php echo $link; ?>">
				<img src="<?php echo $thumbnail_url; ?>" />
			</a>
		<?php 	
		} 
	}
}

