<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7a448448cc83b4869efe12d9db35d8153d498007bdff5de72b40ccd40ddcb708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_23399bd1ec07151269a18bd3fcf6d823265bfe0633195d193b2476a8b66493e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23399bd1ec07151269a18bd3fcf6d823265bfe0633195d193b2476a8b66493e3->enter($__internal_23399bd1ec07151269a18bd3fcf6d823265bfe0633195d193b2476a8b66493e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_e1638f7ddfdc41cd57c8fefc5c1c031c9e0c83b098f96ae0123bc4c90caf24af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1638f7ddfdc41cd57c8fefc5c1c031c9e0c83b098f96ae0123bc4c90caf24af->enter($__internal_e1638f7ddfdc41cd57c8fefc5c1c031c9e0c83b098f96ae0123bc4c90caf24af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23399bd1ec07151269a18bd3fcf6d823265bfe0633195d193b2476a8b66493e3->leave($__internal_23399bd1ec07151269a18bd3fcf6d823265bfe0633195d193b2476a8b66493e3_prof);

        
        $__internal_e1638f7ddfdc41cd57c8fefc5c1c031c9e0c83b098f96ae0123bc4c90caf24af->leave($__internal_e1638f7ddfdc41cd57c8fefc5c1c031c9e0c83b098f96ae0123bc4c90caf24af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_126214e275e173fc1ac01918c85df89e28d8b69e0872d937a67880b6c3aeac6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126214e275e173fc1ac01918c85df89e28d8b69e0872d937a67880b6c3aeac6f->enter($__internal_126214e275e173fc1ac01918c85df89e28d8b69e0872d937a67880b6c3aeac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_136d336222c641a7afb4f3d75174345059629aa82bbca916a851ec15b04b3784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136d336222c641a7afb4f3d75174345059629aa82bbca916a851ec15b04b3784->enter($__internal_136d336222c641a7afb4f3d75174345059629aa82bbca916a851ec15b04b3784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_136d336222c641a7afb4f3d75174345059629aa82bbca916a851ec15b04b3784->leave($__internal_136d336222c641a7afb4f3d75174345059629aa82bbca916a851ec15b04b3784_prof);

        
        $__internal_126214e275e173fc1ac01918c85df89e28d8b69e0872d937a67880b6c3aeac6f->leave($__internal_126214e275e173fc1ac01918c85df89e28d8b69e0872d937a67880b6c3aeac6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
