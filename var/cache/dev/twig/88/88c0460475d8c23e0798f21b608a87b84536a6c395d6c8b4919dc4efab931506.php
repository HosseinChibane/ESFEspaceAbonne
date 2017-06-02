<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7a4d2980264112ed615220037fa78fed1dbbffcc2bb5857bc4c865761cf449ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79f647615c71124e0a4ee9a4fcd7fd58ddbfbd14c19486e43a7b5e0be8bed16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f647615c71124e0a4ee9a4fcd7fd58ddbfbd14c19486e43a7b5e0be8bed16d->enter($__internal_79f647615c71124e0a4ee9a4fcd7fd58ddbfbd14c19486e43a7b5e0be8bed16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_cfb2fadae1b35bc9b30235a48e1ddfab0e53ef965dd9a2b1cf47b3be729f0fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb2fadae1b35bc9b30235a48e1ddfab0e53ef965dd9a2b1cf47b3be729f0fda->enter($__internal_cfb2fadae1b35bc9b30235a48e1ddfab0e53ef965dd9a2b1cf47b3be729f0fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f647615c71124e0a4ee9a4fcd7fd58ddbfbd14c19486e43a7b5e0be8bed16d->leave($__internal_79f647615c71124e0a4ee9a4fcd7fd58ddbfbd14c19486e43a7b5e0be8bed16d_prof);

        
        $__internal_cfb2fadae1b35bc9b30235a48e1ddfab0e53ef965dd9a2b1cf47b3be729f0fda->leave($__internal_cfb2fadae1b35bc9b30235a48e1ddfab0e53ef965dd9a2b1cf47b3be729f0fda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c23cbe5e491b8f427529a1fd1a99f8ca4d0f30f09f011260f11f8444145856ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23cbe5e491b8f427529a1fd1a99f8ca4d0f30f09f011260f11f8444145856ab->enter($__internal_c23cbe5e491b8f427529a1fd1a99f8ca4d0f30f09f011260f11f8444145856ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_758902f76280b4641cfce5e57c0db541e9553d018a4ca2e9160bb0472995b269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758902f76280b4641cfce5e57c0db541e9553d018a4ca2e9160bb0472995b269->enter($__internal_758902f76280b4641cfce5e57c0db541e9553d018a4ca2e9160bb0472995b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_758902f76280b4641cfce5e57c0db541e9553d018a4ca2e9160bb0472995b269->leave($__internal_758902f76280b4641cfce5e57c0db541e9553d018a4ca2e9160bb0472995b269_prof);

        
        $__internal_c23cbe5e491b8f427529a1fd1a99f8ca4d0f30f09f011260f11f8444145856ab->leave($__internal_c23cbe5e491b8f427529a1fd1a99f8ca4d0f30f09f011260f11f8444145856ab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
