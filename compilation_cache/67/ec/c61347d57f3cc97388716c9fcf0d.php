<?php

/* deleteDivision.html.twig */
class __TwigTemplate_67ecc61347d57f3cc97388716c9fcf0d extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "The division has been erased from the database.<br /><br />
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "deleteDivision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
