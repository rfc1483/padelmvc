<?php

/* login.html.twig */
class __TwigTemplate_7445ab8832340bcbe75a92f1b5a062ef extends Twig_Template
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
        echo "<div>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['login']) ? $context['login'] : null), "getErrorString", array(), "method", false), "html");
        echo "</div>
<form name='form' id='form' class='form' action='login.php' onsubmit='return validateLogin(this)' method='post'>
    <fieldset>
        <legend>
            <span>Login</span>
        </legend>
        <input type='hidden' name='page_mode' value='login' />
        <div>
            <label for='userName'>Usuario</label>
            <input name='userName' id='userName' value='";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['login']) ? $context['login'] : null), "getUserName", array(), "method", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='clave'>Clave</label>
            <input name='password' id='password' type='password' />
        </div>   
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Entrar' type='submit' class='button' />
    </fieldset>
</form>
<a href='index.php'>Volver</a>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
