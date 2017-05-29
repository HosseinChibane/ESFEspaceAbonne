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
        $__internal_1d251876c620ca055aab3f8681ceed83fe51f1d94ad914bbe0614059ecfa4ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d251876c620ca055aab3f8681ceed83fe51f1d94ad914bbe0614059ecfa4ef8->enter($__internal_1d251876c620ca055aab3f8681ceed83fe51f1d94ad914bbe0614059ecfa4ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_1554885eb3946d6f00572cb4af204c64697fb75c3fd1038e309670457510c662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1554885eb3946d6f00572cb4af204c64697fb75c3fd1038e309670457510c662->enter($__internal_1554885eb3946d6f00572cb4af204c64697fb75c3fd1038e309670457510c662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d251876c620ca055aab3f8681ceed83fe51f1d94ad914bbe0614059ecfa4ef8->leave($__internal_1d251876c620ca055aab3f8681ceed83fe51f1d94ad914bbe0614059ecfa4ef8_prof);

        
        $__internal_1554885eb3946d6f00572cb4af204c64697fb75c3fd1038e309670457510c662->leave($__internal_1554885eb3946d6f00572cb4af204c64697fb75c3fd1038e309670457510c662_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f1d7227bad7408308186ec580bdf284ade32559651a7e61f39aaa60f0fa3f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1d7227bad7408308186ec580bdf284ade32559651a7e61f39aaa60f0fa3f16->enter($__internal_4f1d7227bad7408308186ec580bdf284ade32559651a7e61f39aaa60f0fa3f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e8e37c31df52e80caa868233ac62ddc162f80d5052a08052f450d090392cc59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e37c31df52e80caa868233ac62ddc162f80d5052a08052f450d090392cc59d->enter($__internal_e8e37c31df52e80caa868233ac62ddc162f80d5052a08052f450d090392cc59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e8e37c31df52e80caa868233ac62ddc162f80d5052a08052f450d090392cc59d->leave($__internal_e8e37c31df52e80caa868233ac62ddc162f80d5052a08052f450d090392cc59d_prof);

        
        $__internal_4f1d7227bad7408308186ec580bdf284ade32559651a7e61f39aaa60f0fa3f16->leave($__internal_4f1d7227bad7408308186ec580bdf284ade32559651a7e61f39aaa60f0fa3f16_prof);

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
