<?php

/* :templates:modal.html.twig */
class __TwigTemplate_39ea9ea0beffb20e65f949629b72c6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'class' => array($this, 'block_class'),
            'id' => array($this, 'block_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"";
        $this->displayBlock('class', $context, $blocks);
        echo "\" id=\"";
        $this->displayBlock('id', $context, $blocks);
        echo "\">
    <div class=\"modal-header\">
        ";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "        <button class=\"close\" data-dismiss=\"modal\">x</button>
    </div> <!-- /modal-header -->
    <div class=\"modal-body\">
        ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 8
        echo "    </div> <!-- /modal-body -->
    <div class=\"modal-footer\"> 
        ";
        // line 10
        $this->displayBlock('footer', $context, $blocks);
        // line 13
        echo "    </div> <!-- /modal-footer -->
</div> <!-- /modal -->";
    }

    // line 1
    public function block_class($context, array $blocks = array())
    {
        echo " modal hide fade ";
    }

    public function block_id($context, array $blocks = array())
    {
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        // line 11
        echo "            <input class=\"btn\" type=\"button\" data-dismiss=\"modal\" value=\"Close\">
        ";
    }

    public function getTemplateName()
    {
        return ":templates:modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  70 => 10,  65 => 7,  60 => 3,  50 => 1,  45 => 13,  43 => 10,  39 => 8,  37 => 7,  32 => 4,  30 => 3,  22 => 1,);
    }
}
