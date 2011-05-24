<?php

/* thankyou.html.twig */
class __TwigTemplate_f8991a2f7a5fc0bcf961385ae4956b47 extends Twig_Template
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
        echo "Thanks for signing up, go <a href='login.php'>here</a> sign in. <br /><br />
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "thankyou.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
