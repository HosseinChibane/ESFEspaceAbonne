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
        $__internal_ca80653e149f2c32d8da3304dd6e2dbf350119ecf432d9618960adbb9ea971f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca80653e149f2c32d8da3304dd6e2dbf350119ecf432d9618960adbb9ea971f3->enter($__internal_ca80653e149f2c32d8da3304dd6e2dbf350119ecf432d9618960adbb9ea971f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_615e09ef7cc3267266c5d16d1f4a03ea7e1bd8a9561b11fcc3f600f572d4959e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615e09ef7cc3267266c5d16d1f4a03ea7e1bd8a9561b11fcc3f600f572d4959e->enter($__internal_615e09ef7cc3267266c5d16d1f4a03ea7e1bd8a9561b11fcc3f600f572d4959e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca80653e149f2c32d8da3304dd6e2dbf350119ecf432d9618960adbb9ea971f3->leave($__internal_ca80653e149f2c32d8da3304dd6e2dbf350119ecf432d9618960adbb9ea971f3_prof);

        
        $__internal_615e09ef7cc3267266c5d16d1f4a03ea7e1bd8a9561b11fcc3f600f572d4959e->leave($__internal_615e09ef7cc3267266c5d16d1f4a03ea7e1bd8a9561b11fcc3f600f572d4959e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28f90e5ad34c1ff0ffb2bef0ef5361763c275af6215a386868d68331f419d86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f90e5ad34c1ff0ffb2bef0ef5361763c275af6215a386868d68331f419d86e->enter($__internal_28f90e5ad34c1ff0ffb2bef0ef5361763c275af6215a386868d68331f419d86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0cf05f4e2edbae21cb8480221e2cf17b8e7096b932dc1db26933cc7dd50fb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cf05f4e2edbae21cb8480221e2cf17b8e7096b932dc1db26933cc7dd50fb03->enter($__internal_c0cf05f4e2edbae21cb8480221e2cf17b8e7096b932dc1db26933cc7dd50fb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c0cf05f4e2edbae21cb8480221e2cf17b8e7096b932dc1db26933cc7dd50fb03->leave($__internal_c0cf05f4e2edbae21cb8480221e2cf17b8e7096b932dc1db26933cc7dd50fb03_prof);

        
        $__internal_28f90e5ad34c1ff0ffb2bef0ef5361763c275af6215a386868d68331f419d86e->leave($__internal_28f90e5ad34c1ff0ffb2bef0ef5361763c275af6215a386868d68331f419d86e_prof);

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
