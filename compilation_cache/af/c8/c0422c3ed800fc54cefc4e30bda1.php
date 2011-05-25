<?php

/* divisionsManager.html.twig */
class __TwigTemplate_afc8c0422c3ed800fc54cefc4e30bda1 extends Twig_Template
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
        echo "<form name='form' id='form' class='form' action='insertDivision.php' onsubmit='return validate(this)' method='post'>
    <fieldset>
        <legend>
            <span>Division</span>
        </legend>
        <input type='hidden' id='stageId' name='stageId' value='";
        // line 8
        echo twig_escape_filter($this->env, (isset($context['stageId']) ? $context['stageId'] : null), "html");
        echo "' />
        <div>
            <label for='level'>level</label>
            <input name='level' id='level' type='text' />
        </div>
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Insert' type='submit' class='button'/>
    </fieldset>
</form>
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "divisionsManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
