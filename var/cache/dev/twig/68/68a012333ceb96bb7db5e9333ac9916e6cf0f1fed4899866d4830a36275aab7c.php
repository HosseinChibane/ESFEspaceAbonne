<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c7bfb4498e823a07d852f8ad5352aa9be73df8c82a184651ba762ad0ca96fc27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_0ac20bc7e3a5db06c9b9974c139f261ccafa1685276c2e7e56fb0bba75c15642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac20bc7e3a5db06c9b9974c139f261ccafa1685276c2e7e56fb0bba75c15642->enter($__internal_0ac20bc7e3a5db06c9b9974c139f261ccafa1685276c2e7e56fb0bba75c15642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_8b380936995e80fc4b7abbb551b80b6b047b0a80412301fa1b03343fd7251f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b380936995e80fc4b7abbb551b80b6b047b0a80412301fa1b03343fd7251f1e->enter($__internal_8b380936995e80fc4b7abbb551b80b6b047b0a80412301fa1b03343fd7251f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac20bc7e3a5db06c9b9974c139f261ccafa1685276c2e7e56fb0bba75c15642->leave($__internal_0ac20bc7e3a5db06c9b9974c139f261ccafa1685276c2e7e56fb0bba75c15642_prof);

        
        $__internal_8b380936995e80fc4b7abbb551b80b6b047b0a80412301fa1b03343fd7251f1e->leave($__internal_8b380936995e80fc4b7abbb551b80b6b047b0a80412301fa1b03343fd7251f1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9b9795c9144ab8b509973b1977b0d63b7792d872090525b84f4d89e328f91b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b9795c9144ab8b509973b1977b0d63b7792d872090525b84f4d89e328f91b1->enter($__internal_f9b9795c9144ab8b509973b1977b0d63b7792d872090525b84f4d89e328f91b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cec7eaba1db4ea55c41db319e63a505543383f2b85d15244780ff8ee82d5045b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec7eaba1db4ea55c41db319e63a505543383f2b85d15244780ff8ee82d5045b->enter($__internal_cec7eaba1db4ea55c41db319e63a505543383f2b85d15244780ff8ee82d5045b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_cec7eaba1db4ea55c41db319e63a505543383f2b85d15244780ff8ee82d5045b->leave($__internal_cec7eaba1db4ea55c41db319e63a505543383f2b85d15244780ff8ee82d5045b_prof);

        
        $__internal_f9b9795c9144ab8b509973b1977b0d63b7792d872090525b84f4d89e328f91b1->leave($__internal_f9b9795c9144ab8b509973b1977b0d63b7792d872090525b84f4d89e328f91b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
