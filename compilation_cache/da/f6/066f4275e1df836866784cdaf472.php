<?php

/* layout.html.twig */
class __TwigTemplate_daf6066f4275e1df836866784cdaf472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\">
<html>
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "</head>
<body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context['pageTitle']) ? $context['pageTitle'] : null), "html");
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />
    <script type=\"text/javascript\" src=\"js/messages.js\"></script>
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
