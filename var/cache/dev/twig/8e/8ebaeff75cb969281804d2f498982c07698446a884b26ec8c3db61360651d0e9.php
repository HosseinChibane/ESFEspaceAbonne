<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ec60a874105fd08413a5ec4695d97ffc0b43431952b94463f9ef14f9a9df6134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_533545a2fbb0ff268d16e81877b3f3320cc7683095f9e9b1c8887ec3c076c1d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533545a2fbb0ff268d16e81877b3f3320cc7683095f9e9b1c8887ec3c076c1d4->enter($__internal_533545a2fbb0ff268d16e81877b3f3320cc7683095f9e9b1c8887ec3c076c1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_85ddbf41e777f3aff9834f57232cbb94be9631443fcd339568abeaa1a5c23949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ddbf41e777f3aff9834f57232cbb94be9631443fcd339568abeaa1a5c23949->enter($__internal_85ddbf41e777f3aff9834f57232cbb94be9631443fcd339568abeaa1a5c23949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533545a2fbb0ff268d16e81877b3f3320cc7683095f9e9b1c8887ec3c076c1d4->leave($__internal_533545a2fbb0ff268d16e81877b3f3320cc7683095f9e9b1c8887ec3c076c1d4_prof);

        
        $__internal_85ddbf41e777f3aff9834f57232cbb94be9631443fcd339568abeaa1a5c23949->leave($__internal_85ddbf41e777f3aff9834f57232cbb94be9631443fcd339568abeaa1a5c23949_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_854b4d46f555eb744f71f7f5b0b81c6880471a6cc791a3154ea643181133edbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854b4d46f555eb744f71f7f5b0b81c6880471a6cc791a3154ea643181133edbd->enter($__internal_854b4d46f555eb744f71f7f5b0b81c6880471a6cc791a3154ea643181133edbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f99158d9d2df3326c71289011129098163cd1ae35d583baaa3da7b698318816f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99158d9d2df3326c71289011129098163cd1ae35d583baaa3da7b698318816f->enter($__internal_f99158d9d2df3326c71289011129098163cd1ae35d583baaa3da7b698318816f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_f99158d9d2df3326c71289011129098163cd1ae35d583baaa3da7b698318816f->leave($__internal_f99158d9d2df3326c71289011129098163cd1ae35d583baaa3da7b698318816f_prof);

        
        $__internal_854b4d46f555eb744f71f7f5b0b81c6880471a6cc791a3154ea643181133edbd->leave($__internal_854b4d46f555eb744f71f7f5b0b81c6880471a6cc791a3154ea643181133edbd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
