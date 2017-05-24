<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_9df9b8eaf3a5548e06cafeb427a6e25ac9e5c1abf629dbec02c283088041fb32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60cdca7a50728307fefaa369244628cc8f6cd97015b32c08ba20dc86e3de92ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60cdca7a50728307fefaa369244628cc8f6cd97015b32c08ba20dc86e3de92ea->enter($__internal_60cdca7a50728307fefaa369244628cc8f6cd97015b32c08ba20dc86e3de92ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_db0a0ee14c8298bba24efbda5f4fe40283880395e3a36dbf6c3897611778172c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0a0ee14c8298bba24efbda5f4fe40283880395e3a36dbf6c3897611778172c->enter($__internal_db0a0ee14c8298bba24efbda5f4fe40283880395e3a36dbf6c3897611778172c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_60cdca7a50728307fefaa369244628cc8f6cd97015b32c08ba20dc86e3de92ea->leave($__internal_60cdca7a50728307fefaa369244628cc8f6cd97015b32c08ba20dc86e3de92ea_prof);

        
        $__internal_db0a0ee14c8298bba24efbda5f4fe40283880395e3a36dbf6c3897611778172c->leave($__internal_db0a0ee14c8298bba24efbda5f4fe40283880395e3a36dbf6c3897611778172c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
