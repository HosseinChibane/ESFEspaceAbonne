<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1b2be407181ca8d4f01e79d1329d431d76524db4432130e90d38608a60a0b484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e74ccbe00758989165931d7acf6179af76f66ab0098cfb490519f7fffa86fdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74ccbe00758989165931d7acf6179af76f66ab0098cfb490519f7fffa86fdad->enter($__internal_e74ccbe00758989165931d7acf6179af76f66ab0098cfb490519f7fffa86fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_e67b5d7799575ff7d688c63f50f08c87cc0bf5ec42dd20178f7017d026a28464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67b5d7799575ff7d688c63f50f08c87cc0bf5ec42dd20178f7017d026a28464->enter($__internal_e67b5d7799575ff7d688c63f50f08c87cc0bf5ec42dd20178f7017d026a28464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74ccbe00758989165931d7acf6179af76f66ab0098cfb490519f7fffa86fdad->leave($__internal_e74ccbe00758989165931d7acf6179af76f66ab0098cfb490519f7fffa86fdad_prof);

        
        $__internal_e67b5d7799575ff7d688c63f50f08c87cc0bf5ec42dd20178f7017d026a28464->leave($__internal_e67b5d7799575ff7d688c63f50f08c87cc0bf5ec42dd20178f7017d026a28464_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f442a35745a451de500f733456ccde0eb7f9da58c23866e5ccada5d2b4d4ab64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f442a35745a451de500f733456ccde0eb7f9da58c23866e5ccada5d2b4d4ab64->enter($__internal_f442a35745a451de500f733456ccde0eb7f9da58c23866e5ccada5d2b4d4ab64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b709c4e031cff9fa47da2b0c1179c5af5a57dab8e2537e758206a7d7407933fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b709c4e031cff9fa47da2b0c1179c5af5a57dab8e2537e758206a7d7407933fd->enter($__internal_b709c4e031cff9fa47da2b0c1179c5af5a57dab8e2537e758206a7d7407933fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_b709c4e031cff9fa47da2b0c1179c5af5a57dab8e2537e758206a7d7407933fd->leave($__internal_b709c4e031cff9fa47da2b0c1179c5af5a57dab8e2537e758206a7d7407933fd_prof);

        
        $__internal_f442a35745a451de500f733456ccde0eb7f9da58c23866e5ccada5d2b4d4ab64->leave($__internal_f442a35745a451de500f733456ccde0eb7f9da58c23866e5ccada5d2b4d4ab64_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
