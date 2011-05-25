<?php

/* insertStage.html.twig */
class __TwigTemplate_ba9a0954b2dc0afabf63b63c5e399afb extends Twig_Template
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
        echo "The new stage has been inserted. <br /><br />
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "insertStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
