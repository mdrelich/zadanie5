<?php
/* Smarty version 3.1.30, created on 2020-12-23 17:48:47
  from "C:\xampp\htdocs\zadanie5\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fe374ef70d5f7_69721270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f671a4e563716771667ec8f826dbfb86e46342e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie5\\app\\CalcView.html',
      1 => 1608742119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_5fe374ef70d5f7_69721270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21348577585fe374ef701b31_39653588', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2823504545fe374ef70d216_79539243', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_21348577585fe374ef701b31_39653588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2823504545fe374ef70d216_79539243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator kredytowy</h3>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <fieldset>
        <label>Kwota: </label>
        <input type="number" placeholder="Kwota" min="1" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
"/><br/>
        <label>Na ile czasu(w latach) </label>
        <input type="number" min="1" placeholder="Ilosc lat" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
"/><br/>
        <label>Oprocentowanie("prosze podać procenty (5%=5)) </label>
        <input type="number" min="1" placeholder="Oprocentowanie" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
"/><br/>
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ol>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <h4>Informacje: </h4>
    <ol class="inf">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ol>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
    <h4>Wynik</h4>
    <p class="res">Miesięczna rata: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
zł
    </p>
    <?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
