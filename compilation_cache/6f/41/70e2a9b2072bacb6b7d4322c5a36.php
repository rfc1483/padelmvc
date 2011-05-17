<?php

/* update.html.twig */
class __TwigTemplate_6f4170e2a9b2072bacb6b7d4322c5a36 extends Twig_Template
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
        echo "Los datos del equipo han sido actualizados. <br />
<a href='index.php'>Volver</a>
";
    }

    public function getTemplateName()
    {
        return "update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
