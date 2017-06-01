<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c6ca4da77675b534500b731f0aefcc46788f74b3e089b247e728ac7867236324 extends Twig_Template
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
        $__internal_97e76d939d53a48d94f5cc632d4bd14a91166058964c5fc374d99d9dc0213a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e76d939d53a48d94f5cc632d4bd14a91166058964c5fc374d99d9dc0213a58->enter($__internal_97e76d939d53a48d94f5cc632d4bd14a91166058964c5fc374d99d9dc0213a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_d07d51439d3844b19e9d75f7dbf971425f4e913af772158fbf081c4e7f184d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07d51439d3844b19e9d75f7dbf971425f4e913af772158fbf081c4e7f184d73->enter($__internal_d07d51439d3844b19e9d75f7dbf971425f4e913af772158fbf081c4e7f184d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_97e76d939d53a48d94f5cc632d4bd14a91166058964c5fc374d99d9dc0213a58->leave($__internal_97e76d939d53a48d94f5cc632d4bd14a91166058964c5fc374d99d9dc0213a58_prof);

        
        $__internal_d07d51439d3844b19e9d75f7dbf971425f4e913af772158fbf081c4e7f184d73->leave($__internal_d07d51439d3844b19e9d75f7dbf971425f4e913af772158fbf081c4e7f184d73_prof);

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
