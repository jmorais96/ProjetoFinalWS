<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 29-11-2018
 * Time: 14:26
 */
//var_dump($movies);
?>

<h1>List of search</h1>
<table class="table table-bordered table-hover">
	<thead>

	<tr>
		<td scope="col" >Name</td>
		<td scope="col" >Id Author</td>
		<td scope="col" >Description</td>
		<td scope="col" >ISBN</td>
		<td scope="col" >image</td>
		<td scope="col" >View Info</td>
	</tr>
	</thead>
	<tbody>
	<?php

	//var_dump($users);
	foreach ($books as $book){ ?>
		<tr>
			<td><?php echo  $book['name'] ?></td>
			<td><?php echo  $book['author'] ?></td>
			<td><?php echo  $book['description'] ?></td>
			<td><?php echo  $book['ISBN'] ?></td>
			<td class="col-lg-6" style="width: 100px; height: 100px;">
				<?php file_put_contents(FCPATH . 'upload/notFound.jpg', base64_decode($book['image'])); ?>
				<img src="<?php //echo base_url('upload/notFound.jpg');?>" class="img-fluid">
			</td>
			<td><a class="download-btn" href="<?php echo site_url("book/getBookInfo/".$book['idBook']); ?>">INFO</a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>