<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f24177dcb61cbfb5f81db4058b5586bed868b99eec9ef2e9fe615da7b7c76b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_46138f069e9e757c400e81f0c5061ac1bab7c2ad25e16a03c6d84f754420c80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46138f069e9e757c400e81f0c5061ac1bab7c2ad25e16a03c6d84f754420c80e->enter($__internal_46138f069e9e757c400e81f0c5061ac1bab7c2ad25e16a03c6d84f754420c80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_d1ee9836a326460a12cd9d23f414dde5150b7f9c4374cfbf81f72c5811db125d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ee9836a326460a12cd9d23f414dde5150b7f9c4374cfbf81f72c5811db125d->enter($__internal_d1ee9836a326460a12cd9d23f414dde5150b7f9c4374cfbf81f72c5811db125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46138f069e9e757c400e81f0c5061ac1bab7c2ad25e16a03c6d84f754420c80e->leave($__internal_46138f069e9e757c400e81f0c5061ac1bab7c2ad25e16a03c6d84f754420c80e_prof);

        
        $__internal_d1ee9836a326460a12cd9d23f414dde5150b7f9c4374cfbf81f72c5811db125d->leave($__internal_d1ee9836a326460a12cd9d23f414dde5150b7f9c4374cfbf81f72c5811db125d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6dbe4a94825cda2d8705c187238bccc962ffee95ee5ae1585fff66e1dbe4849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6dbe4a94825cda2d8705c187238bccc962ffee95ee5ae1585fff66e1dbe4849->enter($__internal_c6dbe4a94825cda2d8705c187238bccc962ffee95ee5ae1585fff66e1dbe4849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1e5c405d984135a8f1f8b704eeaacc190dee70f74c59c9c8c941f7413b6d7377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5c405d984135a8f1f8b704eeaacc190dee70f74c59c9c8c941f7413b6d7377->enter($__internal_1e5c405d984135a8f1f8b704eeaacc190dee70f74c59c9c8c941f7413b6d7377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_1e5c405d984135a8f1f8b704eeaacc190dee70f74c59c9c8c941f7413b6d7377->leave($__internal_1e5c405d984135a8f1f8b704eeaacc190dee70f74c59c9c8c941f7413b6d7377_prof);

        
        $__internal_c6dbe4a94825cda2d8705c187238bccc962ffee95ee5ae1585fff66e1dbe4849->leave($__internal_c6dbe4a94825cda2d8705c187238bccc962ffee95ee5ae1585fff66e1dbe4849_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
