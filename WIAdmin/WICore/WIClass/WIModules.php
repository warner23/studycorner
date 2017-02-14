<?php



class WIModules
{

	function __construct()
	{
		
	}



	public function displayModules()
	{

		$query = $this->WIdb->prepare('SELECT * FROM `WI_Modules`');
		$query->execute();

		while ($res =$query->fetch(PDO::FETCH_ASSOC))
		{
			echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><div class="panel panel-'.$res['mod_panel_cls'].'">
				 <div class="panel-heading"><b>' . $res['module_name'] . '</b> <small id="st_' . $res['module_id'] . '"class="label label-' . $res['mod_status_cls'] . ' mod_status mod_status_' . $res['mod_status_appear'] . '">' . $res['mod_status_appear'] . '</small></div>
				  <div class="panel-body">' . $res['Mod_description'] . '</b></div>
                    <div class = "panel-footer">';
            if($res['mod_version'] === 'pro_only')
            {
            	echo "<button disabled='disabled' class='btn btn-danger btn-xs' style='width: 150px'>Available With Pro Only</button> <a  href='http://wpeden.com/minimax-wordpress-page-layout-builder-plugin/' target='_blank' class='btn btn-primary btn-xs pull-right'>Get Pro <i class='icon icon-chevron-sign-right'></i></a> ";
            } else
            	{
                echo '<button id="' . $res['mod_status'] . '" style="width:80px" status="' . $res['mod_status'] . '" type="button" class="mod_name btn btn-xs btn-default text-primary" rel="' . $res['module_id'] . '">' . $res['mod_icon'] . '</button>
                   &nbsp;<a href = "#" class="check-update btn btn-xs btn-default" rel="' . $res['module_id'] . '">Check Update</a>';
            }
                echo  '</div>
                    </div>
                    </div>';       
		}
	}

	public function activeModules()
	{
		$WIdb = $this->getWIdb();

		$status = 'active';
		$query = $WIdb->prepare('SELECT * FROM `WI_Modules` WHERE `mod_status` =:status');
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->execute();

		while ($res = $query->fetch(PDO::FETCH_ASSOC))
		{
			echo '<div id="draggable-' .$res['module_id'].'" class="external-event ' . $res['module_name'] . ' bg-green ui-draggable"><p>' . $res['module_name'] . '<p></div>';
		}
	}

	public function textModules()
	{
		$WIdb = $this->getWIdb();

		$status = 'active';
		$type  = 'text';

		$query = $WIdb->prepare('SELECT * FROM `WI_Modules` WHERE `mod_status`=:status AND `type`=:type');
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':type', $type, PDO::PARAM_STR);
		$query->execute();

		while ($res = $query->fetch(PDO::FETCH_ASSOC))
		{
			echo '<div class="ModuleBox">
<div id="draggable-' .$res['module_id'].'" class="external-event module ui-draggable">
<div class="pic"><img src="WIMedia/Img/modules/' . $res['image'] . '.png"></div><!-- end pic-->
<div class="module-text">' . $res['module_name'] . '</div><!-- end text--></div><!--end draggable-->
</div><!-- end moduleBox-->';
		}
	}


	public function imagesModules()
		{
		$WIdb = $this->getWIdb();

		$status = 'active';
		$type  = 'image';

		$query = $WIdb->prepare('SELECT * FROM `WI_Modules` WHERE `mod_status`=:status AND `type`=:type');
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':type', $type, PDO::PARAM_STR);
		$query->execute();

		while ($res = $query->fetch(PDO::FETCH_ASSOC))
		{
			echo '<div class="ModuleBox">
<div id="draggable-' .$res['module_id'].'" class="external-event module ui-draggable">
<div class="pic"><img src="WIMedia/Img/modules/' . $res['image'] . '.png"></div><!-- end pic-->
<div class="module-text">' . $res['module_name'] . '</div><!-- end text--></div><!--end draggable-->
</div><!-- end moduleBox-->';
		}
	}

		public function buttonModules()
		{
		$WIdb = $this->getWIdb();

		$status = 'active';
		$type  = 'button';

		$query = $WIdb->prepare('SELECT * FROM `WI_Modules` WHERE `mod_status`=:status AND `type`=:type');
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':type', $type, PDO::PARAM_STR);
		$query->execute();

		while ($res = $query->fetch(PDO::FETCH_ASSOC))
		{
			echo '<div class="ModuleBox">
<div id="draggable-' .$res['module_id'].'" class="external-event module ui-draggable">
<div class="pic"><img src="WIMedia/Img/modules/' . $res['image'] . '.png"></div><!-- end pic-->
<div class="module-text">' . $res['module_name'] . '</div><!-- end text--></div><!--end draggable-->
</div><!-- end moduleBox-->';
		}
	}


}
?>
