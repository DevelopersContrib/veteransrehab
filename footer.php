<? 
$count = 7;
$digits = strlen($follow_count);
$splittedString = str_split($follow_count);

?>
<center style="margin: 15px 30px 20px 30px;">
	<span class="counter counter-analog" data-direction="up" data-interval="1" data-format="9999999" data-stop="<?=$follow_count?>">
		<span class="part part0">
			<?
			for($i=$count; $i>0; $i--){
				if($i==$digits){
					for($j=0;$j<$digits;$j++){						
						echo '<span class="digit digit'.$splittedString[$j].'"></span>';
					}	
					break;					
				}else{
					echo '<span class="digit digit0"></span>';
				}
			}
			?>
		</span>							  
	</span>
</center>
</div>
</div>
<?php if (count($related_domains) >0):?>
<?php $vertical = str_replace('-',' ',ucfirst($related_domains[0]['slug'])) ?>
<div class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center lead-ttle-top">
                    <h4 class="brdr-lead">
                        <i class="fa fa-globe"></i>
                        Other Brands on <?php echo $vertical?> Vertical
                    </h4>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="row">
                       <?php $count = count($related_domains)?>
                        <div class="col-sm-6 col-xs-12">
                            <ul class="list-unstyled ul-verticals">
                               <?php for ($i=0;$i<$count;$i++):?>
                                <li>
                                    <a href="http://<?php echo $related_domains[$i]['domain_name']?>" class="text-capitalize" target="_blank">
                                        <i class="fa fa-arrow-right"></i>
                                        <?php echo $related_domains[$i]['domain_name']?>
                                    </a>
                                </li>
                               
                               <?php if ($count > 5 && $i==4):?>
                               
                            </ul>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <ul class="list-unstyled ul-verticals">
                        <?php endif?>
                       <?php endfor;?>     
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-12 text-center">
                    <br />
                    <div class="form-group">
                        <a href="http://www.contrib.com/verticals/news/<?php echo $related_domains[0]['slug']?>" class="btn btn-success btn-lg" target="_blank">
                            <i class="fa fa-search"></i>
                            View More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php endif?>   
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ul class="list-inline ul-list-footer">
                        <li>
                            <a href="/about" class="text-capitalize">about</a>
                        </li>
                        <li>
                            <a href="/contact" class="text-capitalize">contact us</a>
                        </li>
                        <li>
                            <a href="/partners" class="text-capitalize">partner with us</a>
                        </li>
                        <li>
                            <a href="/staffing" class="text-capitalize">apply now</a>
                        </li>
                        <li>
                            <a href="/terms" class="text-capitalize">terms</a>
                        </li>
                        <li>
                            <a href="/privacy" class="text-capitalize">privacy</a>
                        </li>
                        <li>
                            <a href="/referral" class="text-capitalize">referral</a>
                        </li>
                        <li>
                            <a href="/fund" class="text-capitalize">fund</a>
                        </li>
                        <li>
                            <a href="/developers" class="text-capitalize">developers</a>
                        </li>
                    </ul>
                    <p>
                        &copy; <?php echo $domain?> 2013-2016<br>
                        <?php echo $footer_banner?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>