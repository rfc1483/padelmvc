<?php

/* deleteLeague.html.twig */
class __TwigTemplate_15c4dc950e07c60b03de9858f939a2b4 extends Twig_Template
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
        echo "The league have been erased from the database.<br /><br />
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "deleteLeague.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
