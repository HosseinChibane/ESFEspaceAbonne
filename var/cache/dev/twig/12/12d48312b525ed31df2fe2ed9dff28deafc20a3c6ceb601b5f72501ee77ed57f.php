<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ab4b213342269119759cc4e09446537d982fe6d7a400070235f3af9b4889c713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a2a67e6081059f75da43d6bc4112180f2e33338037dca7b384d7d8401a2d9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2a67e6081059f75da43d6bc4112180f2e33338037dca7b384d7d8401a2d9fa->enter($__internal_4a2a67e6081059f75da43d6bc4112180f2e33338037dca7b384d7d8401a2d9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1c9f7fe71f3dab4e485b038443cffc8c56691d1284479e1ba17746b3b28f56c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9f7fe71f3dab4e485b038443cffc8c56691d1284479e1ba17746b3b28f56c6->enter($__internal_1c9f7fe71f3dab4e485b038443cffc8c56691d1284479e1ba17746b3b28f56c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4a2a67e6081059f75da43d6bc4112180f2e33338037dca7b384d7d8401a2d9fa->leave($__internal_4a2a67e6081059f75da43d6bc4112180f2e33338037dca7b384d7d8401a2d9fa_prof);

        
        $__internal_1c9f7fe71f3dab4e485b038443cffc8c56691d1284479e1ba17746b3b28f56c6->leave($__internal_1c9f7fe71f3dab4e485b038443cffc8c56691d1284479e1ba17746b3b28f56c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
