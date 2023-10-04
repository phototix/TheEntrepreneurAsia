<style>
.fade.in {
    opacity: 1;
}
.alert-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear;
}
.close {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
}
a {
    color: #337ab7;
    text-decoration: none;
}
a {
    background-color: transparent;
}
</style>
<?php if($_SESSION["systemError"]<>""){ ?>
    <div class="alert alert-warning">
      <h4><i class="icon fa fa-warning"></i> Alert!</h4>
      <?=$_SESSION["systemError"]?>
      <?php $systemSucces=$_SESSION["systemError"]; ?>
    </div>
<?php $_SESSION["systemError"]=""; } ?>

<?php if($_SESSION["systemSucces"]<>""){ ?>
    <div class="alert alert-success">
      <h4><i class="icon fa fa-check"></i> Success!</h4>
      <?=$_SESSION["systemSucces"]?>
      <?php $systemSucces=$_SESSION["systemSucces"]; ?>
    </div>
<?php $_SESSION["systemSucces"]=""; } ?>
