<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_479e1d07d5b7fb3872773354aa5a8446fae0f05b04507d35951515e160e5deaf extends Twig_Template
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
        $__internal_5c283a8aa13e4addf66f4fc547d35219ac93ff6db82a28da5a8cd5de2d18b4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c283a8aa13e4addf66f4fc547d35219ac93ff6db82a28da5a8cd5de2d18b4a7->enter($__internal_5c283a8aa13e4addf66f4fc547d35219ac93ff6db82a28da5a8cd5de2d18b4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_bceff04557408ff1ca9a34942e1d1798db80e342e010d4f043e250c15e54e9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bceff04557408ff1ca9a34942e1d1798db80e342e010d4f043e250c15e54e9ef->enter($__internal_bceff04557408ff1ca9a34942e1d1798db80e342e010d4f043e250c15e54e9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5c283a8aa13e4addf66f4fc547d35219ac93ff6db82a28da5a8cd5de2d18b4a7->leave($__internal_5c283a8aa13e4addf66f4fc547d35219ac93ff6db82a28da5a8cd5de2d18b4a7_prof);

        
        $__internal_bceff04557408ff1ca9a34942e1d1798db80e342e010d4f043e250c15e54e9ef->leave($__internal_bceff04557408ff1ca9a34942e1d1798db80e342e010d4f043e250c15e54e9ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
