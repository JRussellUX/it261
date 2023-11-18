<?php
$language['HTML'] = 'logo7_Markup_Language.';
$language['CSS'] = 'logo8_Cascading_Style_Sheets.';
$language['PHP'] = 'logo1_Hypertext_Preprocessor.';
$language['Java'] = 'logo2_Cross_Platform_Language.';
$language['JavaScript'] = 'logo3_Object_Oriented_Language.';
$language['Python'] = 'logo4_Object_Oriented_Language.';
$language['SQL'] = 'logo6_Structured_Query_Language.';
$language['C++'] = 'logo5_Object_Oriented_Language.';

include('./config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    
    <table>
        <?php foreach ($language as $name => $image):
            $desc = substr($image, 6);
            $desc = str_replace('_', ' ', $desc); ?>
            <tr>
                <td><img src="images/gallery/<?php echo substr($image, 0, 5); ?>.png"
                        alt="<?php echo str_replace('_', ' ', $name); ?>" width="100"></td>
                <td>
                    <?php echo str_replace('_', ' ', $name); ?>
                </td>
                <td>
                    <?php echo $desc; ?>
                </td>

            </tr>
        <?php endforeach; ?>


    </table>

</div>
<!--end wrapper-->
<?php
include('./includes/footer.php');
?>