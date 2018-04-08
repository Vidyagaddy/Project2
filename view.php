<h2>
	<a href="<?=Uri::create('index.php/sc/index'); ?>">Home</a>
	
	<br>
	<br>
	<br>
	
	<?= $attr['title']; ?>
	
</h2>
<div class="h2Content">
	<h5> Description </h5>
	<?= $attr['description']; ?>
	<br>
	<br>
	<?php echo Asset::img($attr['image'],array("width" => "300px"));?>

	<br>
	
	
	<div class = "comments">
<?php
        $errors = "";
        if (isset($_POST['op'])) {
                if($_POST['name'] != ""){
                        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                        if($_POST['name'] == ""){
                                $errors .= 'Please enter a valid name.<br/><br/>';
                        }
                }
                else {
                        $errors .= 'Please enter your name.<br/>';
                }
                if($_POST['content'] != ""){
                        $content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
                        if($_POST['name'] == ""){
                                $errors .= 'Please enter valid content.<br/><br/>';
                        }
                }
                else {
                        $errors .= 'Please enter your content.<br/>';
                }
                if(!$errors) {
                        echo "<h2 align=\"center\">Your Comment Has Been Posted</h2>\n";
                        echo "<blockquote> \n $name : $content \n </blockquote>\n";
                } else {
                        echo '<div style="color: red">' . $errors . '<br/></div>';
                }
        }
        else if(!isset($username)){
                //do nothing
        }
	else {
	?>
        <h2 align="center">We'd Love to Hear From You</h2>
        <p>Enter your comment below </p>
        <form method="post" action="island.php">
        Name    <input type="text" name="name"    size="30"><br/>
        <textarea name="content" rows="5" cols="40"></textarea><br/>
        <input type="hidden" value="done" name="op">
        <input type="submit" value="Save">
        </form>
<?php
	}
	?>

<br /><br />
</div>
	
</div>
