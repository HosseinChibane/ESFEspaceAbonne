<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fbff8bb767668e417b21f8d50b7146687149b5f67c0bf26d39560895c52df962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_455813f19fdd5cb13f7bdfafc3aec71614205f07605beff3411e3ee819e07b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455813f19fdd5cb13f7bdfafc3aec71614205f07605beff3411e3ee819e07b0a->enter($__internal_455813f19fdd5cb13f7bdfafc3aec71614205f07605beff3411e3ee819e07b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_675e82d09a70d2e52d4c123f6a3f78a21fb3d64e68fc7e1a9d5acfef8d6867d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675e82d09a70d2e52d4c123f6a3f78a21fb3d64e68fc7e1a9d5acfef8d6867d9->enter($__internal_675e82d09a70d2e52d4c123f6a3f78a21fb3d64e68fc7e1a9d5acfef8d6867d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455813f19fdd5cb13f7bdfafc3aec71614205f07605beff3411e3ee819e07b0a->leave($__internal_455813f19fdd5cb13f7bdfafc3aec71614205f07605beff3411e3ee819e07b0a_prof);

        
        $__internal_675e82d09a70d2e52d4c123f6a3f78a21fb3d64e68fc7e1a9d5acfef8d6867d9->leave($__internal_675e82d09a70d2e52d4c123f6a3f78a21fb3d64e68fc7e1a9d5acfef8d6867d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57a92cddf6143903a28a866eec273e35eb0fc7c691afaf10787288546c5a9b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a92cddf6143903a28a866eec273e35eb0fc7c691afaf10787288546c5a9b56->enter($__internal_57a92cddf6143903a28a866eec273e35eb0fc7c691afaf10787288546c5a9b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2394b0fe41e858a857d1a76607526802900a40cad6c736a0ba2e247d01a9a971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2394b0fe41e858a857d1a76607526802900a40cad6c736a0ba2e247d01a9a971->enter($__internal_2394b0fe41e858a857d1a76607526802900a40cad6c736a0ba2e247d01a9a971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2394b0fe41e858a857d1a76607526802900a40cad6c736a0ba2e247d01a9a971->leave($__internal_2394b0fe41e858a857d1a76607526802900a40cad6c736a0ba2e247d01a9a971_prof);

        
        $__internal_57a92cddf6143903a28a866eec273e35eb0fc7c691afaf10787288546c5a9b56->leave($__internal_57a92cddf6143903a28a866eec273e35eb0fc7c691afaf10787288546c5a9b56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
