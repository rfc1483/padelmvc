<?php

/* updateStage.html.twig */
class __TwigTemplate_f76f6ba89d0e5116bee7ea8b15609747 extends Twig_Template
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
        echo "Stage data has been updated. <br /> <br />
<a href='index.php'>Volver</a>
";
    }

    public function getTemplateName()
    {
        return "updateStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
