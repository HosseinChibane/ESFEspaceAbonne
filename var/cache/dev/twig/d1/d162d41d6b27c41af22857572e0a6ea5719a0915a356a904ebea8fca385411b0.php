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
        $__internal_5c778af78279a5f159bf5ff35a422b3deb829bc54836bdc07506dd12bdd4b8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c778af78279a5f159bf5ff35a422b3deb829bc54836bdc07506dd12bdd4b8cc->enter($__internal_5c778af78279a5f159bf5ff35a422b3deb829bc54836bdc07506dd12bdd4b8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_25fee0de80ecccb950c63ae7e63c77c0b1e4e66f9a8d439e41c65450aa8a03ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fee0de80ecccb950c63ae7e63c77c0b1e4e66f9a8d439e41c65450aa8a03ce->enter($__internal_25fee0de80ecccb950c63ae7e63c77c0b1e4e66f9a8d439e41c65450aa8a03ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c778af78279a5f159bf5ff35a422b3deb829bc54836bdc07506dd12bdd4b8cc->leave($__internal_5c778af78279a5f159bf5ff35a422b3deb829bc54836bdc07506dd12bdd4b8cc_prof);

        
        $__internal_25fee0de80ecccb950c63ae7e63c77c0b1e4e66f9a8d439e41c65450aa8a03ce->leave($__internal_25fee0de80ecccb950c63ae7e63c77c0b1e4e66f9a8d439e41c65450aa8a03ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f56e3f82fce6258d4ad78c7c71a8ac2501ed26aeb95a235ec7e7cdfbcaea927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f56e3f82fce6258d4ad78c7c71a8ac2501ed26aeb95a235ec7e7cdfbcaea927->enter($__internal_0f56e3f82fce6258d4ad78c7c71a8ac2501ed26aeb95a235ec7e7cdfbcaea927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c249de83ea9139e9552cf2ffe8962d6f406850336a0c8ad3237e2ce8a7ba53f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c249de83ea9139e9552cf2ffe8962d6f406850336a0c8ad3237e2ce8a7ba53f8->enter($__internal_c249de83ea9139e9552cf2ffe8962d6f406850336a0c8ad3237e2ce8a7ba53f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c249de83ea9139e9552cf2ffe8962d6f406850336a0c8ad3237e2ce8a7ba53f8->leave($__internal_c249de83ea9139e9552cf2ffe8962d6f406850336a0c8ad3237e2ce8a7ba53f8_prof);

        
        $__internal_0f56e3f82fce6258d4ad78c7c71a8ac2501ed26aeb95a235ec7e7cdfbcaea927->leave($__internal_0f56e3f82fce6258d4ad78c7c71a8ac2501ed26aeb95a235ec7e7cdfbcaea927_prof);

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
