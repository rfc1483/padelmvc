<?php

/* modify.html.twig */
class __TwigTemplate_b20e0341f6a3e9698c32889699609742 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<script type=\"text/javascript\" src=\"js/ajax.js\"></script>
    ";
        // line 4
        echo $this->renderParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<form name='form' id='form' class='form' action='update.php' onsubmit='return validate(this)' method='post'>
    
    <fieldset>
        <legend>
            <span>Equipo</span>
        </legend>
        <input type='hidden' id='id' name='id' value='";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "id", array(), "any", false), "html");
        echo "' />
        <div>
            <label for='name1'>Nombre primer jugador</label>
            <input id='name1' name='name1' id='name1' value='";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "name1", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='surname1'>Apellido primer jugador</label>
            <input name='surname1' id='surname1' value='";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "surname1", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='telefono1'>Telefono primer jugador</label>
            <input name='phone1' id='phone1' value='";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "phone1", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='email1'>E-mail primer jugador</label>
            <input name='email1' id='email1' value='";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "email1", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='name2'>Nombre segundo jugador</label>
            <input name='name2' id='name2' value='";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "name2", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='surname2'>Apellido segundo jugador</label>
            <input name='surname2' id='surname2' value='";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "surname2", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='telefono2'>Telefono segundo jugador</label>
            <input name='phone2' id='phone2' value='";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "phone2", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='email2'>E-mail segundo jugador</label>
            <input name='email2' id='email2' value='";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "email2", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='userName'>Nombre de usuario</label>
            <input name='userName' id='userName' value='";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "userName", array(), "any", false), "html");
        echo "' type='text' />
        </div>
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Guardar' type='submit' class='button'/>
    </fieldset>
</form>
<br />
<form name='form' id='form' class='form' action='delete.php' onsubmit='return validate(this)' method='post'>
    <input type='hidden' id='id' name='id' value='";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['teamData']) ? $context['teamData'] : null), "id", array(), "any", false), "html");
        echo "' />
    <input name='submit' id='submit' value='Eliminar' type='submit' class='button'/>
</form>
<br />
<a href='index.php'>Volver</a>
";
    }

    public function getTemplateName()
    {
        return "modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
