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
        $__internal_278712f24c4410925523ce28ba98126b26a4e61d3fb8899f49907f52b089ac6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278712f24c4410925523ce28ba98126b26a4e61d3fb8899f49907f52b089ac6f->enter($__internal_278712f24c4410925523ce28ba98126b26a4e61d3fb8899f49907f52b089ac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_6c49ad9ebbaa13581e576a29dfb6f87f96a1bb3c734241026d3fa76caafc7954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c49ad9ebbaa13581e576a29dfb6f87f96a1bb3c734241026d3fa76caafc7954->enter($__internal_6c49ad9ebbaa13581e576a29dfb6f87f96a1bb3c734241026d3fa76caafc7954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_278712f24c4410925523ce28ba98126b26a4e61d3fb8899f49907f52b089ac6f->leave($__internal_278712f24c4410925523ce28ba98126b26a4e61d3fb8899f49907f52b089ac6f_prof);

        
        $__internal_6c49ad9ebbaa13581e576a29dfb6f87f96a1bb3c734241026d3fa76caafc7954->leave($__internal_6c49ad9ebbaa13581e576a29dfb6f87f96a1bb3c734241026d3fa76caafc7954_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_623a97a5727d02508997b6254665af1db6b2cafa7d8c18df79d0e17f3b97eba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623a97a5727d02508997b6254665af1db6b2cafa7d8c18df79d0e17f3b97eba5->enter($__internal_623a97a5727d02508997b6254665af1db6b2cafa7d8c18df79d0e17f3b97eba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d40db5c816d0a9f6845bf7d47401da6e092822c473c841666556c2a9ccf3ef41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40db5c816d0a9f6845bf7d47401da6e092822c473c841666556c2a9ccf3ef41->enter($__internal_d40db5c816d0a9f6845bf7d47401da6e092822c473c841666556c2a9ccf3ef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d40db5c816d0a9f6845bf7d47401da6e092822c473c841666556c2a9ccf3ef41->leave($__internal_d40db5c816d0a9f6845bf7d47401da6e092822c473c841666556c2a9ccf3ef41_prof);

        
        $__internal_623a97a5727d02508997b6254665af1db6b2cafa7d8c18df79d0e17f3b97eba5->leave($__internal_623a97a5727d02508997b6254665af1db6b2cafa7d8c18df79d0e17f3b97eba5_prof);

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
