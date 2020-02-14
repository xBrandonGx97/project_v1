<?php
	define('AJAX_CALL',true);
    # Autoloader
	require_once($_SERVER['DOCUMENT_ROOT']."../app/bootstrap.php");
	Bootstrap::_is_ajax();

	use Jenssegers\Blade\Blade;
	// Create Blade Instance
	$blade = new Blade('../app/views','cache');
	
    use \Classes\Utils\Data;
    use \Classes\DB\MSSQL;
    use \Classes\Utils\User;
    \Classes\Utils\Session::init('Default');
    require_once($_SERVER['DOCUMENT_ROOT'].'../app/models/Support.php');
    $Support	=	new Support();
    list($UserUID,$TicketID,$Category,$Subject,$Message,$Status,$Date) = explode("~",$_POST["id"]);
?>

<div class="row m_b_10">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="text-center">
			<h3 class="u">Category: <?php echo $Category; ?></h3>
		</div>
	</div>
</div>

<form class="form-inline">
	<div class="row pl_10_p">
		<div class="form-group mx-sm-3 mb-2">
			<label class="pr_5" for="TcktTest">Ticket ID:</label>
			<input type="text" name="ticketID" value="<?php echo $TicketID; ?>" class="form-control form-custom input-sm tac b_i" readonly/>
		</div>
		<div class="form-group mx-sm-3 mb-2">
			<label class="pr_5" for="SubTest">Subject:</label>
			<input type="text" name="Subject" value="<?php echo $Subject; ?>" class="form-control form-custom input-sm tac b_i" readonly/>
		</div>
	</div>
</form>
<div class="container">
	<?php
		$Support->editTicket($UserUID,$TicketID);
	?>
	<?php foreach($Support->row as $tickets) {
		if($tickets["Type"] == '0'){ ?>
			<div class="row">
				<div class="col-md-9 badge-pill badge-primary">
					<div class="row plr_15">
						<div class="col-md-12">
							<font class="b_i"> <?php echo User::_fetch_UserGameInfo($tickets['UserUID'],'UserID'); ?> said:</font>
						</div>
					</div>
					<div class="row plr_15">
						<div class="col-md-12">
							<?php echo $tickets['Message']; ?>
						</div>
					</div>
				</div>
			</div>
			<?php Separator(15); ?>
		<?php }elseif($tickets["Type"] == '1'){
			?>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-9 badge-pill badge-secondary">
					<div class="row tar plr_15">
						<div class="col-md-12">
							<font class="b_i"> <?php echo User::_fetch_UserGameInfo($tickets['RespUID'],'UserID'); ?> said:</font>
						</div>
					</div>
					<div class="row tar plr_15">
						<div class="col-md-12">
							<?php echo $tickets['Message']; ?>
						</div>
					</div>
				</div>
			</div>
		<?php }
	}?>
</div>

