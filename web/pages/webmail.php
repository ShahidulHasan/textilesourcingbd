<?php if(!empty($_POST)){
    $detail='Name:'.$_POST['name'].'<br/>'.'Telephone NO#'.$_POST['phone'].'<br/>'.'Fax:'.$_POST['fax'].'<br/>'.'Email:'.$_POST['email'].'<br/>'.'Address:'.$_POST['address'].'<br/>'.'Note:'.$_POST['details'].
    include('class/email.class.php');

    $email=new Email();
    $email->to(array('rahat.bubt@gmail.com','shanto.646596@gmail.com','tamim@textilesourcingbd.com','ahmed@textilesourcingbd.com','ifti@textilesourcingbd.com'),'receiver_name')
           ->from($_POST['email'],$_POST['name'])
           ->subject($_POST['name'])
           ->message($detail)
           ->send();
}?>
<div class="imageS" style=" background: white;height: 780px;padding-top: 3px;">
            <div class="blogA"><?php echo $msgSend;?></div>
            <div id="imageSl">
                <div class="blogS">
                    <div class="picHeader">
                        Feed Back Form
                    </div>                     
                </div>
                <div class="blogContact">

                   

                    <div class="feedback">
    
    <form action="#"method="post" name="feedbackfrm">
        <table>
          
            <tr>
                <td width="31%" height="26" align="right" valign="top"><strong><span class="feedBackLabel">Name</span><span class="head_line1"> *</span></strong></td>
                <td width="69%" height="26" align="left" valign="top" class="feedbackText">
                    <input name="name" type="text" id="name" size="50">
                </td>
            </tr>
            <tr>
                <td height="26" align="right" valign="top"><strong><span class="feedBackLabel">Address</span><span class="head_line1"> *</span></strong></td>
                <td height="26" align="left" valign="top" class="feedbackText">
                    <input name="address" type="text" id="address" size="50">
                </td>
            </tr>
            <tr>
                <td height="26" align="right" valign="top"><span class="feedBackLabel"><strong>Telephone</strong></span></td>
                <td height="26" align="left" valign="top" class="feedbackText">
                    <input name="phone" type="text" id="phone" size="50">
                </td>
            </tr>
            <tr>
                <td height="26" align="right" valign="top"> <span class="feedBackLabel"><strong><span class="style26">Fax</span> </strong></span> </td>
                <td height="26" align="left" valign="top" class="feedbackText">
                    <input name="fax" type="text" id="fax" size="40">
                </td>
            </tr>
            <tr>
                <td height="26" align="right" valign="top"><strong><span class="feedBackLabel">E-mail</span><span class="head_line1"> *</span></strong></td>
                <td height="26" align="left" valign="top" class="feedbackText">
                    <input name="email" type="text" id="email" size="40">
                </td>
            </tr>
            <tr>
                <td height="28" align="right" valign="top"><span class="feedBackLabel"><strong>Details</strong></span></td>
                <td rowspan="2" align="left" valign="top" class="feedbackText">
                    <textarea name="details" style="width: 381px;" cols="45"  rows="4" id="details"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2" align="right" valign="top">&nbsp;</td>
            </tr>
            <tr>
                <td align="left" valign="top">
                    <input type="submit" name="Add" value="Send">
                    <input name="reset" type="reset" id="reset" value="Reset" onclick="void(0);">
                </td>
            </tr>
            
        </table>
    </form>
</div>                    
                    
                  
                </div>  
              
            </div>