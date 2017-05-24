<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_c6e6b72fe6040e338db0963bfd13cd75805f7db24ad18a917e16d8d799f5c55d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_68712975dfdfca060e01de9f57080c2c19aa43cb909a6333106af06f3334207f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68712975dfdfca060e01de9f57080c2c19aa43cb909a6333106af06f3334207f->enter($__internal_68712975dfdfca060e01de9f57080c2c19aa43cb909a6333106af06f3334207f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_00e1497dd3ff114fd4cf88c7b28f3c7d147386f930e788bffbe52c537e661967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e1497dd3ff114fd4cf88c7b28f3c7d147386f930e788bffbe52c537e661967->enter($__internal_00e1497dd3ff114fd4cf88c7b28f3c7d147386f930e788bffbe52c537e661967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68712975dfdfca060e01de9f57080c2c19aa43cb909a6333106af06f3334207f->leave($__internal_68712975dfdfca060e01de9f57080c2c19aa43cb909a6333106af06f3334207f_prof);

        
        $__internal_00e1497dd3ff114fd4cf88c7b28f3c7d147386f930e788bffbe52c537e661967->leave($__internal_00e1497dd3ff114fd4cf88c7b28f3c7d147386f930e788bffbe52c537e661967_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2055bfe8e68492613a2f4f0cf107b5aa0f0066988b0cb12607a198c3a75a8061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2055bfe8e68492613a2f4f0cf107b5aa0f0066988b0cb12607a198c3a75a8061->enter($__internal_2055bfe8e68492613a2f4f0cf107b5aa0f0066988b0cb12607a198c3a75a8061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac8f1ae091f5ec4d3cc86482e2248f8ddeaba88e123ece343710e11e7c412625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8f1ae091f5ec4d3cc86482e2248f8ddeaba88e123ece343710e11e7c412625->enter($__internal_ac8f1ae091f5ec4d3cc86482e2248f8ddeaba88e123ece343710e11e7c412625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ac8f1ae091f5ec4d3cc86482e2248f8ddeaba88e123ece343710e11e7c412625->leave($__internal_ac8f1ae091f5ec4d3cc86482e2248f8ddeaba88e123ece343710e11e7c412625_prof);

        
        $__internal_2055bfe8e68492613a2f4f0cf107b5aa0f0066988b0cb12607a198c3a75a8061->leave($__internal_2055bfe8e68492613a2f4f0cf107b5aa0f0066988b0cb12607a198c3a75a8061_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
