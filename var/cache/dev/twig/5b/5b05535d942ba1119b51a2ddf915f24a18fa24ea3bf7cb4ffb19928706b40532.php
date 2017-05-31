<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0ed43657211e2f45fa0b4382da11d9835dba6aa61473b39cd0f764bc5033d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d05fd283a859e35425b5c8aefcacae4f13a812a2ea4ee0d6200a280dfc8e1f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05fd283a859e35425b5c8aefcacae4f13a812a2ea4ee0d6200a280dfc8e1f8e->enter($__internal_d05fd283a859e35425b5c8aefcacae4f13a812a2ea4ee0d6200a280dfc8e1f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_9028c04441450eab30f5690fa522826d01d2db820a000f2f7b9e41cb192052ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9028c04441450eab30f5690fa522826d01d2db820a000f2f7b9e41cb192052ea->enter($__internal_9028c04441450eab30f5690fa522826d01d2db820a000f2f7b9e41cb192052ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d05fd283a859e35425b5c8aefcacae4f13a812a2ea4ee0d6200a280dfc8e1f8e->leave($__internal_d05fd283a859e35425b5c8aefcacae4f13a812a2ea4ee0d6200a280dfc8e1f8e_prof);

        
        $__internal_9028c04441450eab30f5690fa522826d01d2db820a000f2f7b9e41cb192052ea->leave($__internal_9028c04441450eab30f5690fa522826d01d2db820a000f2f7b9e41cb192052ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5c4e0cad2762a88c8b2d00efb4228e18101d93282e6201d16c409238e0dcda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c4e0cad2762a88c8b2d00efb4228e18101d93282e6201d16c409238e0dcda8->enter($__internal_f5c4e0cad2762a88c8b2d00efb4228e18101d93282e6201d16c409238e0dcda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_445e2c229451ae887ea6e45691433bf738e0d2e073cf2f136eba2abf5c376069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445e2c229451ae887ea6e45691433bf738e0d2e073cf2f136eba2abf5c376069->enter($__internal_445e2c229451ae887ea6e45691433bf738e0d2e073cf2f136eba2abf5c376069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_445e2c229451ae887ea6e45691433bf738e0d2e073cf2f136eba2abf5c376069->leave($__internal_445e2c229451ae887ea6e45691433bf738e0d2e073cf2f136eba2abf5c376069_prof);

        
        $__internal_f5c4e0cad2762a88c8b2d00efb4228e18101d93282e6201d16c409238e0dcda8->leave($__internal_f5c4e0cad2762a88c8b2d00efb4228e18101d93282e6201d16c409238e0dcda8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
