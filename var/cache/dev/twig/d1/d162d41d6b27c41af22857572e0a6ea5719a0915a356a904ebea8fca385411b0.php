<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6af58d5e8928c0d2ad6c4fe42742140e92fbbf66f530df390e1204c0564e2012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d00b00616cd3eac67bc0e495eab460828a7d7a238f4c3f77b5582c21541b4c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00b00616cd3eac67bc0e495eab460828a7d7a238f4c3f77b5582c21541b4c50->enter($__internal_d00b00616cd3eac67bc0e495eab460828a7d7a238f4c3f77b5582c21541b4c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_ba9da8652a744e2fc67739401bb5307cd262227537c855e405760385807b5ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9da8652a744e2fc67739401bb5307cd262227537c855e405760385807b5ff4->enter($__internal_ba9da8652a744e2fc67739401bb5307cd262227537c855e405760385807b5ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d00b00616cd3eac67bc0e495eab460828a7d7a238f4c3f77b5582c21541b4c50->leave($__internal_d00b00616cd3eac67bc0e495eab460828a7d7a238f4c3f77b5582c21541b4c50_prof);

        
        $__internal_ba9da8652a744e2fc67739401bb5307cd262227537c855e405760385807b5ff4->leave($__internal_ba9da8652a744e2fc67739401bb5307cd262227537c855e405760385807b5ff4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4093a4b2b7920ca5c13291c56cde3f814bee8dd52b3535b25fe0deba29044a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4093a4b2b7920ca5c13291c56cde3f814bee8dd52b3535b25fe0deba29044a6->enter($__internal_e4093a4b2b7920ca5c13291c56cde3f814bee8dd52b3535b25fe0deba29044a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6031c0472473ac492573a505650a00dc9ac496c13b6320a3f2cfd927fa9ed6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6031c0472473ac492573a505650a00dc9ac496c13b6320a3f2cfd927fa9ed6bf->enter($__internal_6031c0472473ac492573a505650a00dc9ac496c13b6320a3f2cfd927fa9ed6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6031c0472473ac492573a505650a00dc9ac496c13b6320a3f2cfd927fa9ed6bf->leave($__internal_6031c0472473ac492573a505650a00dc9ac496c13b6320a3f2cfd927fa9ed6bf_prof);

        
        $__internal_e4093a4b2b7920ca5c13291c56cde3f814bee8dd52b3535b25fe0deba29044a6->leave($__internal_e4093a4b2b7920ca5c13291c56cde3f814bee8dd52b3535b25fe0deba29044a6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
