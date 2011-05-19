<?php

/* teamTable.html.twig */
class __TwigTemplate_de2f1870111bacc09fcd8f02c62e0433 extends Twig_Template
{
    protected $parent;

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("find.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 3
        if (($this->getAttribute((isset($context['find']) ? $context['find'] : null), "pageMode", array(), "any", false) == "find")) {
            // line 4
            echo "    This is a foo line!
";
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "teamTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
