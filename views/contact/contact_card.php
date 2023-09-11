<?= $message_info_contact ?>


<img src="<?= $pic_url ?>">
<?= $last_name ?>
<?= $first_name ?>
<?= $pseudo ?>
<?= $phone_number ?>
<?= $email ?>
<?= $street_address ?>
<?= $number_address ?>
<?= $zip_address ?>
<?= $city_address ?>
<?= $created_at ?>
<?= $updated_at ?>




<a onClick="javascript: return confirm ('Voulez-vous supprimer <?= $first_name . " " . $last_name ?> ?')" href='?page=update&id=<?= $id ?>'><button>🖍️</button></a>
<a onClick="javascript: return confirm ('Voulez-vous supprimer <?= $first_name . " " . $last_name ?> ?')" href='?page=delete&id=<?= $id ?>'><button>🗑️</button></a>