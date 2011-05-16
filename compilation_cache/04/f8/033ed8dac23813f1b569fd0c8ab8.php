<?php

/* index.html.twig */
class __TwigTemplate_04f8033ed8dac23813f1b569fd0c8ab8 extends Twig_Template
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
        echo "    ";
        if (((isset($context['session']) ? $context['session'] : null) == null)) {
            // line 4
            echo "        Registro <a href='register.php'>aqui</a> <br />
        Autentificacion <a href='login.php'>aqui</a> <br />
        Busqueda <a href='find.php'>aqui</a>
    ";
        } else {
            // line 8
            echo "        Hola ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['session']) ? $context['session'] : null), "userName", array(), "any", false), "html");
            echo "
        <br /><br />
        <a href='logout.php'>Log out</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
