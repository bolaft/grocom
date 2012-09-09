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
        return array (  65 => 7,  45 => 13,  136 => 62,  100 => 36,  85 => 27,  76 => 23,  61 => 14,  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 64,  140 => 28,  118 => 12,  105 => 8,  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 63,  134 => 26,  132 => 60,  127 => 46,  123 => 44,  109 => 39,  93 => 31,  90 => 52,  54 => 14,  133 => 44,  124 => 41,  111 => 10,  80 => 47,  60 => 3,  52 => 10,  97 => 4,  95 => 21,  88 => 29,  78 => 46,  71 => 14,  72 => 16,  64 => 15,  53 => 11,  42 => 7,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 58,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 4,  40 => 6,  26 => 2,  22 => 1,  25 => 4,  23 => 1,  92 => 55,  86 => 50,  79 => 24,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 39,  63 => 18,  58 => 13,  49 => 9,  43 => 10,  37 => 7,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 22,  50 => 1,  46 => 8,  44 => 11,  39 => 8,  33 => 5,  30 => 3,  27 => 3,  135 => 50,  129 => 59,  122 => 46,  116 => 42,  113 => 40,  108 => 9,  104 => 24,  102 => 37,  94 => 33,  89 => 29,  87 => 32,  84 => 49,  81 => 25,  73 => 11,  70 => 10,  67 => 38,  62 => 35,  59 => 23,  55 => 21,  51 => 19,  48 => 10,  41 => 8,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
