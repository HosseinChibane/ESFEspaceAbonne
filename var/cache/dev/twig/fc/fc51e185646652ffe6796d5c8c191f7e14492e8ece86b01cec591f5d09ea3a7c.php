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
        $__internal_a1c2a8cd71141880ead1185731b9f0140a3dd219add7340f3fe08a8f42834d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c2a8cd71141880ead1185731b9f0140a3dd219add7340f3fe08a8f42834d8b->enter($__internal_a1c2a8cd71141880ead1185731b9f0140a3dd219add7340f3fe08a8f42834d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_fc279327864997938decf1d047da99d7a7cd0b95a9c57034c3e58a08232537cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc279327864997938decf1d047da99d7a7cd0b95a9c57034c3e58a08232537cf->enter($__internal_fc279327864997938decf1d047da99d7a7cd0b95a9c57034c3e58a08232537cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1c2a8cd71141880ead1185731b9f0140a3dd219add7340f3fe08a8f42834d8b->leave($__internal_a1c2a8cd71141880ead1185731b9f0140a3dd219add7340f3fe08a8f42834d8b_prof);

        
        $__internal_fc279327864997938decf1d047da99d7a7cd0b95a9c57034c3e58a08232537cf->leave($__internal_fc279327864997938decf1d047da99d7a7cd0b95a9c57034c3e58a08232537cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2a9b478a87b3fa637670dcfd48fea6aa3f50c854a716a2e44489bb1e7f98d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a9b478a87b3fa637670dcfd48fea6aa3f50c854a716a2e44489bb1e7f98d9b->enter($__internal_c2a9b478a87b3fa637670dcfd48fea6aa3f50c854a716a2e44489bb1e7f98d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c3dd30694b9fe4c0da2476f572e5a297409e742f7b81ae2956f878e47d15ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3dd30694b9fe4c0da2476f572e5a297409e742f7b81ae2956f878e47d15ec6->enter($__internal_4c3dd30694b9fe4c0da2476f572e5a297409e742f7b81ae2956f878e47d15ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4c3dd30694b9fe4c0da2476f572e5a297409e742f7b81ae2956f878e47d15ec6->leave($__internal_4c3dd30694b9fe4c0da2476f572e5a297409e742f7b81ae2956f878e47d15ec6_prof);

        
        $__internal_c2a9b478a87b3fa637670dcfd48fea6aa3f50c854a716a2e44489bb1e7f98d9b->leave($__internal_c2a9b478a87b3fa637670dcfd48fea6aa3f50c854a716a2e44489bb1e7f98d9b_prof);

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
