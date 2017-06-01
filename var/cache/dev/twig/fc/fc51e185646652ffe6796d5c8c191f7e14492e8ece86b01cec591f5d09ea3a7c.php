<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_286a8eb0ac231059f4ba4930b2aa723b3e58c5c281c3649378338a323eb2a997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_17fa792c88e1ea024813214d2c867f9e41dfdaf3bb59bd0a29ccc44b81ca1801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fa792c88e1ea024813214d2c867f9e41dfdaf3bb59bd0a29ccc44b81ca1801->enter($__internal_17fa792c88e1ea024813214d2c867f9e41dfdaf3bb59bd0a29ccc44b81ca1801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_56afe0e8941abb8340fecac6a04bf640d8f1aecb6f9f0ff59103c1002607677f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56afe0e8941abb8340fecac6a04bf640d8f1aecb6f9f0ff59103c1002607677f->enter($__internal_56afe0e8941abb8340fecac6a04bf640d8f1aecb6f9f0ff59103c1002607677f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fa792c88e1ea024813214d2c867f9e41dfdaf3bb59bd0a29ccc44b81ca1801->leave($__internal_17fa792c88e1ea024813214d2c867f9e41dfdaf3bb59bd0a29ccc44b81ca1801_prof);

        
        $__internal_56afe0e8941abb8340fecac6a04bf640d8f1aecb6f9f0ff59103c1002607677f->leave($__internal_56afe0e8941abb8340fecac6a04bf640d8f1aecb6f9f0ff59103c1002607677f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e052be537822a862e58d593cbec674a2d7c86dc03028dd52b33cb61cc56cedfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e052be537822a862e58d593cbec674a2d7c86dc03028dd52b33cb61cc56cedfc->enter($__internal_e052be537822a862e58d593cbec674a2d7c86dc03028dd52b33cb61cc56cedfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ebea67af3f8e48b2316a9680011278e0220e97627f1fca0c7658e3c61c6731f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebea67af3f8e48b2316a9680011278e0220e97627f1fca0c7658e3c61c6731f->enter($__internal_2ebea67af3f8e48b2316a9680011278e0220e97627f1fca0c7658e3c61c6731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_2ebea67af3f8e48b2316a9680011278e0220e97627f1fca0c7658e3c61c6731f->leave($__internal_2ebea67af3f8e48b2316a9680011278e0220e97627f1fca0c7658e3c61c6731f_prof);

        
        $__internal_e052be537822a862e58d593cbec674a2d7c86dc03028dd52b33cb61cc56cedfc->leave($__internal_e052be537822a862e58d593cbec674a2d7c86dc03028dd52b33cb61cc56cedfc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
